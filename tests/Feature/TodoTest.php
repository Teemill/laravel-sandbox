<?php

use App\Models\Todo;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use function Pest\Faker\faker;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

beforeEach(function () {
    $this->user = User::factory()->create();

    Sanctum::actingAs($this->user);
});

it('requires a title to be created', function () {
    $response = postJson(route('todo.store'), []);

    $response->assertStatus(422);

    expect($response->getContent())
        ->json()
        ->errors->toBeArray()
        ->sequence(
            fn ($error) => $error->toBe([
                'title should be a string no longer than 191 characters'
            ])
        );
});

test('a user can create a todo', function () {
    $response = postJson(route('todo.store'), [
        'title' => $title = faker()->words(random_int(5, 12), true),
    ]);

    $response->assertStatus(201);

    assertDatabaseHas('todos', [
        'title' => $title,
    ]);

    expect($response->getContent())
        ->json()
        ->title->toBe($title);
});

it('provides a list of your todos', function () {
    Todo::factory()->for($this->user)->create();

    $response = getJson(route('todo.index'));

    $response->assertStatus(200);

    expect($response->getContent())
        ->json()
        ->toHaveLength(1)
        ->sequence(
            fn ($todo) => $todo->user_id->toBe($this->user->id)
        );
});
