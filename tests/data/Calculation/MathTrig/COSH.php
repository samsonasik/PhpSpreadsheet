<?php

return [
    ['#VALUE!'], // exception not enough args
    ['#VALUE!', '"ABC"'],
    [1, 0],
    [1.543081, 1],
    [1.543081, -1.0],
    [3.762196, 2.0],
    [11013.23292, 10],
];