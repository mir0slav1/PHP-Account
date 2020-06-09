<?php
declare(strict_types=1);

namespace MiroslavSapic\Account;


use PDO;

class AccountManager
{
    protected $db;

    private $dbTablePrefix;

    protected function __construct($dbConnection, string $dbTablePrefix = "")
    {
        if ($dbConnection instanceof PDO)
            $this->db = null;

        $this->dbTablePrefix = $dbTablePrefix;
    }
}