<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\RRelation>
 */
class RRelationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['author', 'course']);

        if($type == 'author'){
            return [
                'author_id' => User::where('type','author')->inRandomOrder()->first()->id,
                'user_id' => User::where('type','user')->inRandomOrder()->first()->id,
                'review_id' => ReviewFactory::new()->create()->id,
                'score' => $this->faker->randomElement([1,2,3,4,5])
            ];
        }else{
            $author_id = User::where('type','author')->inRandomOrder()->first()->id;
            while(Course::where('author_id',$author_id)->first() == null){
                $author_id = User::where('type','author')->inRandomOrder()->first()->id;
            }
            return [
                'author_id' => $author_id,
                'user_id' => User::where('type','user')->inRandomOrder()->first()->id,
                'course_id' => Course::where('author_id',$author_id)->inRandomOrder()->first()->id,
                'review_id' => ReviewFactory::new()->create()->id,
                'score' => $this->faker->randomElement([1,2,3,4,5])
            ];
        }
    }
}
