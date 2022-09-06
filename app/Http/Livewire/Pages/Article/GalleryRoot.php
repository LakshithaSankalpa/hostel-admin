<?php

namespace App\Http\Livewire\Pages\Article;

use Axc\article\ArticleImageGear;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class GalleryRoot extends Component
{
    use WithFileUploads, Actions;
    public $article;
    // protected $listeners = ['go-to-next-page' => 'nextPage'];
    public $photo = [];

    /**
     * Method render
     *
     * @return void
     */
    public function render()
    {
        return view('pages.article.components.gallery-root', [
            'images' => ArticleImageGear::own(['article_id' => $this->article->id], 2),
        ]);
    }

    /**
     * rules
     *
     * @return void
     */
    public function rules()
    {
        return[
            'photo.*' => ['required|file|mimetypes:image/jpeg,image/png'],
        ];
    }

    /**
     * messages
     *
     * @return void
     */
    public function messages()
    {
        return[
            'photo.required' => 'The image is required',
            'photo.mimetypes' => 'Please insert jpeg and png files only'
        ];
    }

    /**
     * updated
     *
     * @param  mixed $propertyName
     * @return void
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Upload Files
     *
     * @return void
     */
    public function uploadFiles()
    {
        $validated = $this->validate()['photo'];
        foreach ($validated as $key => $photo) {
            $stored = $photo->store('media', 'public');
            ArticleImageGear::create([
                'article_id' => $this->article->id,
                'image_path' => explode('media/', $stored)[1],
            ]);
        }
        $this->notification()->success(
            $title = 'Success',
            $description = 'Gallery image uploaded successfully'
        );
        $this->photo = [];
        $this->emit('reloadLightBox');
    }

    /**
     * Delete Confirm
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteConfirm($id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Do you want to delete the image?',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, Please',
                'method' => 'deleteImage',
                'params' => [$id],
            ],
            'reject' => [
                'label' => 'No, cancel',
                // 'method' => 'CompleteTheSignerCancel',
            ],
        ]);
    }

    /**
     * Method Delete Image
     *
     * @param  int  $imageId [explicite description]
     * @return void
     */
    public function deleteImage($imageId)
    {
        $image = ArticleImageGear::find($imageId);
        Storage::delete('public/media' . $image->image_path);
        $image->delete();
        $this->notification()->success(
            $title = 'Success',
            $description = 'Image deleted successfully'
        );
        $this->emit('reloadLightBox');
    }
}
