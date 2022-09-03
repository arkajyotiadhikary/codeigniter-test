<?php

function getRandomNumber($arr) {
    shuffle($arr);
    return end($arr);
}
