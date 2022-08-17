<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpRequestsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected function setUp(): void
{
    parent::setUp(); // TODO: Change the autogenerated stub
//    Http::fake([
//        'https://jsonplaceholder.*'=>
//         Http::response([
//        'userId'=>5000
//    ] , 200, [
//        'x-header'=>'this is header'
//         ])
//    ]);
//
    Http::fake([
        'https://jsonplaceholder.*'=>
         Http::sequence()
        ->push([
            'userId'=>123
        ])
        ->push([
            'userId'=>456
        ])
    ]);
}


    /**
     * @test
     */
    public function requests_test_laravel7()
    {
//        $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts' , ['userId' => 2]);
//       dd( $response->offsetGet('userId'));

        $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts' , ['userId' => 123]);

        $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts' , ['userId' => 456]);
        dd( $response->json());
//        dd( $response->json());

    }
}