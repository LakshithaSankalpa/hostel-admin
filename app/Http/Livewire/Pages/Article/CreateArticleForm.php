<?php

namespace App\Http\Livewire\Pages\Article;

use App\Models\Article\Article;
use Axc\article\ArticleGear;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    public $article;
    public $article_image;
    use WithFileUploads;
    use Actions;

    public function render()
    {
        return view('pages.article.components.create-article-form');
    }

    /**
     * mount function
     *
     * @return void
     */
    public function mount()
    {
        $this->article = new Article();
    }

    /**
     * Validation rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'article.title' => 'required',
            'article.introduction' => 'nullable',
        ];
    }
    protected $messages = [
        'article.title.required' => 'Please enter Article Title',
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

    /**
     * Submit Article
     *
     * @return void
     */
    public function submitArticle()
    {
        $data = $this->validate();
        $article = ArticleGear::create($data['article']);
        return redirect()->route('articles.edit', md5($article->id));
    }
}
