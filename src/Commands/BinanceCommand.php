<?php

namespace Binance\Binance\Commands;

use Illuminate\Console\Command;

class BinanceCommand extends Command
{
    public $signature = 'binance';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
