<?php

namespace App\Http\Livewire\Pages\GuestRequests;

use App\Models\GuestRequests\GuestRequest;

use App\Models\Profiles\Packages\PPackage;
use App\Traits\GuestRequestHelper;
use App\Traits\PPackageHelper;
use Axc\guestRequests\GuestRequestGear;
use Illuminate\Contracts\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use WireUi\Traits\Actions;

class GuestRequestTable extends PowerGridComponent
{
    use ActionButton, Actions;
    use GuestRequestHelper;

    /**
     * Data Source
     *
     * @return Builder
     */
    public function datasource(): ?Builder
    {
        return GuestRequest::query();
    }

    /**
     * columns
     *
     * @return array
     */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('status', function (GuestRequest $guestRequest) {
                return $this->getStatus($guestRequest->status);
            })
            ->addColumn('action', function (GuestRequest $guestRequest) {
                return view(
                    'pages.guestRequests.components.action-btn',
                    [
                        'id' => $guestRequest->id,
                        'status' => $guestRequest->status
                    ]
                );
            });
    }

    /**
     * columns
     *
     * @return array
     */
    public function columns(): array
    {

        return [
            Column::add()
                ->title(__('ID'))
                ->sortable()
                ->field('id'),

            Column::add()
                ->title(__('Name'))
                ->field('name')
                ->searchable(),
            Column::add()
                ->title(__('Email'))
                ->field('email')
                ->searchable(),

            Column::add()
                ->title(__('Phone Number'))
                ->field('phone')
                ->searchable(),
            Column::add()
                ->title(__('Message'))
                ->field('message')
                ->searchable(),

            Column::add()
                ->title(__('Status'))
                ->field('status'),

            Column::add()
                ->title(__('Actions'))
                ->field('action'),
        ];
    }

    /**
     * Method Unread Message
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function unreadMessage($id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Do you want to unread this message.',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, Please',
                'method' => 'unreadNow',
                'params' => [$id],
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    /**
     * Unread Now
     *
     * @param  mixed $id
     * @return void
     */
    public function unreadNow($id)
    {
        GuestRequestGear::statusChange($id);
        $this->notification()->success(
            $title = "Success",
            $description = "Guest Request unread successfully",
        );
    }
    /**
     * Method read Message
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function readMessage($id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Do you want to read this message.',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, Please',
                'method' => 'readNow',
                'params' => [$id],
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }
    /**
     * Activate Now
     *
     * @param  mixed $id
     * @return void
     */
    public function readNow($id)
    {
        GuestRequestGear::statusChange($id);
        $this->notification()->success(
            $title = "Success",
            $description = "Guest Request read successfully",
        );
    }
}
