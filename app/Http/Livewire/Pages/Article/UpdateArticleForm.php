<?php

namespace App\Http\Livewire\Pages\Article;

use Axc\article\ArticleGear;
use Axc\media\MediaGear;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateArticleForm extends Component
{
    use WithFileUploads;
    public $article;
    public $description;
    public $articleImage;
    protected $listeners = [
        'setDescription' => 'setArticleDescription',
    ];

    public function render()
    {
        return view('pages.article.components.update-article-form');
    }

    public function mount()
    {
        $this->description = $this->article->description;
    }

    /**
     * rules
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'article.title' => 'required',
            'description' => 'nullable',
            'article.introduction' => 'nullable',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'article.title.required' => 'Please Enter Article Title',
    ];

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

    public function setArticleDescription($description)
    {
        $this->article->description = $description;
    }

    /**
     * Submit Article
     *
     * @return void
     */
    public function submitArticle()
    {
        $data = $this->validate();
        if ($this->articleImage != null) {
            if ($this->article->image_url != null && file_exists('storage/' . $this->article->image_url)) {
                unlink('storage/' . $this->article->image_url);
            }
            $path = $this->articleImage->store('media', 'public');
            $pathParts = explode("media/", $path);
            $image = MediaGear::create([
                'name' => $pathParts[1],
                'url' => $path
            ]);
        }
        ArticleGear::update(ArticleGear::find($this->article->id), [
            'title' => $this->article->title,
            'introduction' => $this->article->introduction,
            'image_url' => ($this->articleImage != null) ? ($path) : ($this->article->image_url),
            'description' => $this->description,

        ]);
        return redirect()->route('articles.index');
    }
}
