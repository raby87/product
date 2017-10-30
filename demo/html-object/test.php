<?php
/**
 * Created by PhpStorm.
 * User: raby
 * Date: 17/10/30
 * Time: 下午10:48
 */
require_once 'vendor/autoload.php';

echo \HtmlObject\Input::create('text','id','10')->render();
echo PHP_EOL;

echo \HtmlObject\Input::create('text')
    ->setAttributes(['name'=>'user','vaule'=>'20'])
    ->render();
echo PHP_EOL;
echo \HtmlObject\Element::p('text')->class('foobar');

echo PHP_EOL;

echo \HtmlObject\Element::input('text')
    ->name('created_at')
    ->vaule('20171021')->class('foobar');

echo PHP_EOL;
echo $form = \HtmlObject\Element::form()
    ->action("hello.php")
    ->method("get");

echo PHP_EOL;

$form = \HtmlObject\Element::form()
    ->action("hello.php")
    ->method("get");


$input = \HtmlObject\Element::input()
    ->type('text')
    ->name('created_at')
    ->vaule('20171021')->class('foobar');


$div = \HtmlObject\Element::div()->class('foobar');


$button = \HtmlObject\Element::input()
    ->type('button')
    ->name('add')
    ->vaule('提交')->class('foobar');

echo $form->nest(
    [
        $div->nest($input),
        $button
    ]);
echo PHP_EOL;


$d = [
        [
            'input'=>'text',
            'name',
            'vaule'
        ],
        [
            'input'=>'button',
            'name'=>'id',
            'vaule'=>'20'
        ],
];


$this->defaultNameVauleList([
    ['id','20'],
    ['username','li']
]);

$this->normalFormList($d);