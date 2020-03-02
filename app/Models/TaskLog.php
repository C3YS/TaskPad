<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id                TaskLog ID
 * @property integer $task_id           Task ID
 * @property integer $user_id           User ID
 * @property integer $duration_minutes  Task duration in minutes
 * @property string $created_at         Object creation datetime
 * @property string $updated_at         Object update datetime
 */
class TaskLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'duration_minutes'
    ];

    /*
     -- Relationships
    */

    /**
     * Get the user that created this task log entry.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the task this task log entry belongs to.
     */
    public function task()
    {
        return $this->hasOne(Task::class);
    }

    /*
     -- Scopes
    */

     
    /*
     -- Accessors
    */

    /*
     -- Mutators
    */


    /*
     -- Utility
    */
}
