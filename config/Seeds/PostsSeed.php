<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2023-03-03 10:00:00',
                'modified' => '2023-03-03 10:00:00'    
            ],
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2023-03-03 10:00:00',
                'modified' => '2023-03-03 10:00:00'    
            ],
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2023-03-03 10:00:00',
                'modified' => '2023-03-03 10:00:00'    
            ],
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2023-03-03 10:00:00',
                'modified' => '2023-03-03 10:00:00'    
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
