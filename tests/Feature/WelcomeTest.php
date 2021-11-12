<?php

test('it can display a welcome message', function () {
    $response = $this->get('/api/hello')->assertStatus(200);

    expect($response->getContent())
        ->json()
        ->message->toBe('Welcome to test driven development');
});
