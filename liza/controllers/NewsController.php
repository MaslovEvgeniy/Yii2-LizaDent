<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 19.03.2017
 * Time: 21:03
 */

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\NewsSearchForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $categories = self::getCategoriesList();

        $articles = new ActiveDataProvider([
            'query' => Article::find(),
            'pagination' => [
                'pageSize' => 2,
                'route' => '/news',
                'pageSizeParam' => false,
            ],
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC,
                ]
            ],
        ]);

        $contactForm = new ContactForm();

        $searchForm = new NewsSearchForm();

        return $this->render('news', compact('categories', 'articles', 'contactForm', 'articles', 'searchForm'));
    }


    public function actionCategory($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $articles = new ActiveDataProvider([
            'query' => Article::find()->where(['category_id' => $category->id]),
            'pagination' => [
                'pageSize' => 2,
                'route' => '/news/category',
                'pageSizeParam' => false,
            ],
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC,
                ]
            ],
        ]);

        $categories = self::getCategoriesList();

        $contactForm = new ContactForm();

        $searchForm = new NewsSearchForm();

        return $this->render('category', compact('contactForm', 'articles', 'categories', 'searchForm'));
    }

    public function actionSearch()
    {
        $query = Yii::$app->request->get('q');
        if(isset($query)) {

            $categories = self::getCategoriesList();

            $articles = new ActiveDataProvider([
                'query' => Article::find()->where([
                    'or',
                    ['like', 'title', $query],
                    ['like', 'content', $query]
                ]),
                'pagination' => [
                    'pageSize' => 2,
                    'route' => '/news/search',
                    'pageSizeParam' => false,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'date' => SORT_DESC,
                    ]
                ],
            ]);

            $searchForm = new NewsSearchForm();

            $contactForm = new ContactForm();

            return $this->render('search', compact('categories', 'articles', 'contactForm', 'articles', 'searchForm', 'query'));
        } else {
            return $this->redirect('/news');
        }
    }

    private function getCategoryBySlug($slug)
    {
        if (($category = Category::findOne(['slug' => $slug])) !== null) {
            return $category;
        } else {
            throw new NotFoundHttpException();
        }
    }

    private function getCategoriesList()
    {
        $categories = Category::find()->asArray()->all();

        $categoryMenuItems = array();
        foreach ($categories as $category) {
            $categoryMenuItems[] = [
                'label' => $category['title'],
                'labelTemplate' => '{label} Label',
                'url' => '/news/' . $category['slug'],
                'active' => Yii::$app->request->get('slug') == $category['slug'],
            ];
        }

        return $categoryMenuItems;
    }
}