<?php
declare(strict_types=1);

namespace App\solutions\t1\Handle;

use App\solutions\t1\Contracts\Handle;

class HandleObjectTwo implements Handle
{
	public function handle(): string
	{
		return 'handle_object_2';
	}
}
