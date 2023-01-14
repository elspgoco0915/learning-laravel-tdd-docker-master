<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyLevel extends Model
{
    use HasFactory;

    private $remainingCount;

    public function __construct(int $remainingCount)
    {
        $this->remainingCount = $remainingCount;
    }

    public function mark(): string
    {
        if ($this->remainingCount === 0) {
            return '×';
        }
        if ($this->remainingCount < 5) {
            return '△';
        }
        return '◎';
    }

    public function slug(): int
    {
        if ($this->remainingCount === 0) {
            return 'empty';
        }
        if ($this->remainingCount < 5) {
            return 'few';
        }
        return 'enough';
    }

    public function __toString()
    {
        return $this->mark();
    }
}
