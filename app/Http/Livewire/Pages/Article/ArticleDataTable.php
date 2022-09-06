<?php

namespace App\Http\Livewire\Pages\Article;

use App\Models\Article\Article;
use App\Traits\ArticleHelper;
use Axc\article\ArticleGear;
use Livewire\Component;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use WireUi\Traits\Actions;
use PowerComponents\LivewirePowerGrid\Column;
use Illuminate\Contracts\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;

final class ArticleDataTable extends PowerGridComponent
{
    use ArticleHelper;
    use ActionButton, Actions;
    public $createBtn = true;
    public $createBtnText = 'Create Article';
    public $createBtnRedirect = "articles.create";
    /**
     * Data Source
     *
     * @return Builder
     */
    public function datasource(): ?Builder
    {
        return Article::query();
    }

    /**
     * columns
     *
     * @return array
     */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('status', function (Article $article) {
                return $this->getStatus($article->status);
            })
            ->addColumn('action', function (Article $article) {
                return view(
                    'pages.article.components.action-btn',
                    [
                        'id' => $article->id,
                        'deletedAt' => $article->deleted_at,
                        'status' => $article->status,
                    ]
                );
            });
    }

    public function columns(): array
    {

        return [
            Column::add()
                ->title(__('ID'))
                ->sortable()
                ->field('id'),

            Column::add()
                ->title(__('Title'))
                ->field('title')
                ->searchable(),
            Column::add()
                ->title(__('Status'))
                ->field('status'),

            Column::add()
                ->title(__('Actions'))
                ->field('action'),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
     */
    public function setUp(): void
    {
        $this->showPerPage()
            ->showSearchInput()
            ->showExportOption('download', ['excel', 'csv']);
    }

    /**
     * Method Unread Message
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function unpublishArticle($id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Do you want to unpublish this article.',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, Please',
                'method' => 'unpublishNow',
                'params' => [$id],
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    /**
     * Unpublish Now
     *
     * @param  mixed $id
     * @return void
     */
    public function unpublishNow($id)
    {
        ArticleGear::statusChange($id);
        $this->notification()->success(
            $title = "Success",
            $description = "Article unpublished successfully",
        );
    }
    /**
     * Method publish article
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function publishArticle($id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Do you want to publis this article.',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, Please',
                'method' => 'publishNow',
                'params' => [$id],
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }
    /**
     * Publish Now
     *
     * @param  mixed $id
     * @return void
     */
    public function publishNow($id)
    {
        ArticleGear::statusChange($id);
        $this->notification()->success(
            $title = "Success",
            $description = "Article published successfully",
        );
    }
}
