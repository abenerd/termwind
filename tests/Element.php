<?php

use Symfony\Component\Console\Output\BufferedOutput;
use function Termwind\line;
use function Termwind\renderUsing;

afterEach(fn () => renderUsing(null));

it('renders', function () {
    renderUsing($output = new BufferedOutput());

    line('string')->textColor('red')->render();

    expect($output->fetch())->toBe("string\n");
});
