<?php

namespace Otus\Repositories;

use Otus\Interfaces\FilmRepositoryInterface;

class FilmRepository implements FilmRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPopularFilmsByGenre(array $genresList): array
    {
        // TODO: Implement getPopularFilmsByGenre() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getPopularFilmsByProfession(array $professionsList): array
    {
        // TODO: Implement getPopularFilmsByProfession() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getPopularFilmsByAgeRange(int $fromAge, int $toAge): array
    {
        // TODO: Implement getPopularFilmsByAgeRange() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getPopularFilmsByPeriod(int $fromYear, int $toYear): array
    {
        // TODO: Implement getPopularFilmsByPeriod() method.
    }
}