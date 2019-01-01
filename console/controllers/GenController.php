<?php
/**
 * Created by PhpStorm.
 * User: Asscy
 * Date: 29.12.2018
 * Time: 3:30
 */
namespace console\controllers;

use common\models\User;
use frontend\models\Article;
use Faker\Factory;
use frontend\models\Category;
use frontend\models\SignupForm;
use yii\console\Controller;

class GenController extends Controller
{
    public function actionIndex()
    {
        $faker = Factory::create();
        echo "Welcome in content Generator\n";
    }

    public function actionCategory($count=null)
    {
        if($count==null){
            echo "Argument count==null\n";
            die;
        }

        $faker = Factory::create();

        for($i=0;$i<=$count;$i++){
            $category = new Category();

            $category->name=ucfirst($faker->words(2,true));
            $category->active=1;
            $time = time();
            $category->created_at=$time;
            $category->updated_at=$time;
            $category->save();
        }
        echo "{$count} category has been created\n";
    }

    public function actionArticle($count=null)
    {
        if($count==null){
            echo "Argument count==null\n";
            die;
        }

        $faker = Factory::create();

        for($i=0;$i<=$count;$i++){

            $Article = new Article();
            $Article->category_id=rand(1,20);
            $Article->picture="16f0d92ac44783042236b66f663589fd8051e906.jpg";
            $Article->author=rand(1,20);
            $Article->title=ucfirst($faker->words(2,true));
            $Article->content=$faker->text(1500);
            $Article->active=1;
            $Article->created_at=time();
            $Article->save();
        }
        echo "{$count} article has been created\n";
    }

    public function actionUser($count=null)
    {
        if($count==null){
            echo "Argument count==null\n";
            die;
        }

        for($i=0;$i<=$count;$i++){

            $user = new User();
            $user->username = "user".$i;
            $user->email = "user".$i."@mail.com";
            $user->setPassword("12345");
            $user->generateAuthKey();
            $user->save();
        }
        echo "{$count} user has been created\n";
    }
}