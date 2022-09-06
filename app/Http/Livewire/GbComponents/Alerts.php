<?php

namespace App\Http\Livewire\GbComponents;

use Livewire\Component;
use WireUi\Traits\Actions;
use Session;

class Alerts extends Component
{
    use Actions;
    public function render()
    {
        // $this->getFlashNotification();
        return view('components.alerts');
    }
    /**
     * Method mount
     *
     * @return void
     */
    public function mount()
    {
        // $this->getFlashNotification();
    }
    /**
     * Method getFlashNotification
     *
     * @return void
     */
    public function getFlashNotification()
    {
        foreach (['error', 'warning', 'success', 'info'] as $code) {

            if (session()->has('alert-' . $code)) {
                $msg = session("alert-" . $code);
                switch ($code) {
                    case 'success':
                        $this->notification()->success(
                            $title = $msg['title'] ?? "Success",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'error':
                        $this->notification()->error(
                            $title = $msg['title'] ?? "Error",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'info':
                        $this->notification()->info(
                            $title = $msg['title'] ?? "Important",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'warning':
                        $this->notification()->warning(
                            $title = $msg['title'] ?? "Warning",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                }
                session()->forget('alert-' . $code);
            }
            if (session()->has('dialog-' . $code)) {
                $msg = session("dialog-" . $code);
                switch ($code) {
                    case 'success':
                        $this->dialog()->success(
                            $title = $msg['title'] ?? "Success",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'error':

                        $this->dialog()->error(
                            $title = $msg['title'] ?? "Error",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'info':
                        $this->dialog()->info(
                            $title = $msg['title'] ?? "Important",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                    case 'warning':
                        $this->dialog()->warning(
                            $title = $msg['title'] ?? "Warning",
                            $description = $msg['message'] ?? "",
                        );
                        break;
                }
                session()->forget('dialog-' . $code);
            }
        }
    }
}
