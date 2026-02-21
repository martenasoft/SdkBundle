<?php

namespace MartenaSoft\CommonLibrary\Helper;

use Psr\Log\LoggerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Uid\Uuid;

class StringHelper
{
    public static function slug(string $text): string
    {
        $slugger  = new AsciiSlugger();
        return $slugger->slug(strtolower($text));
    }

    public static function pathCleaner(string $text, ?callable $fn = null): string
    {
        $pattern = sprintf('/\%s{2,}/', DIRECTORY_SEPARATOR);
        $result = preg_replace($pattern, DIRECTORY_SEPARATOR, $text);
        if ($fn !== null) {
            return $fn($result);
        }
        return $result;
    }

    public static function slugCleaner(string $text, bool $isRemoveFirstSlash = false, ?callable $fn = null): string
    {
        $pattern = sprintf('/\%s{2,}/', '/');
        $result = preg_replace($pattern, '/', $text);
        if ($isRemoveFirstSlash) {
            $result = preg_replace('/^\/+/', '', $text);
        }

        if ($fn !== null) {
            return $fn($result);
        }
        return $result;
    }

    public static function getSlugFromPath(?string $path): ?string
    {
        if (empty($path)) {
            return $path;
        }
        if (!empty($path)) {
            $sxp = explode('/', $path);
            $slug = end($sxp);
        } else {
            $slug = '';
        }
        return $slug;
    }

    public static function exceptionLoggerHelper(string $message, \Throwable $exception, LoggerInterface $logger): void
    {
        $logger->error($message, [
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString()
        ]);
    }

    public static function getRandomUuid(): Uuid
    {
        return Uuid::v4();
    }
}
