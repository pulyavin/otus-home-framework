<?php

namespace Otus\Interfaces;

interface FilmRepositoryInterface
{
    /**
     * Returns popular films by genre
     *
     * @param array $genresList
     *
     * @return FilmInterface[]
     */
    public function getPopularFilmsByGenre(array $genresList): array;

    /**
     * Returns popular films by profession
     *
     * @param array $professionsList
     *
     * @return FilmInterface[]
     */
    public function getPopularFilmsByProfession(array $professionsList): array;

    /**
     * Returns popular films by age range
     *
     * @param int $fromAge
     * @param int $toAge
     *
     * @return FilmInterface[]
     */
    public function getPopularFilmsByAgeRange(int $fromAge, int $toAge): array;

    /**
     * Returns popular films by period
     *
     * @param int $fromYear
     * @param int $toYear
     *
     * @return FilmInterface[]
     */
    public function getPopularFilmsByPeriod(int $fromYear, int $toYear): array;
}