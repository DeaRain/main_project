<?php
/**
 * Created by PhpStorm.
 * User: Asscy
 * Date: 29.12.2018
 * Time: 3:30
 */
namespace console\controllers;

use Faker\Factory;
use frontend\models\Category;
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
}