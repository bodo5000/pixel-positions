<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to Employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});


it('can have Tag', function () {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('FrontEnd');

    // Assert
    expect($job->tags)->toHaveCount(1);
});
