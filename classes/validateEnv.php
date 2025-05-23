<?php

function validateEnv(array $requiredVars)
{
    foreach ($requiredVars as $var) {
        if (!isset($_ENV[$var]) && !isset($_SERVER[$var])) {
            throw new Exception("Variável de ambiente {$var} não está definida");
        }
    }
}
