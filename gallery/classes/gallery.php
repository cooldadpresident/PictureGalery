<?php
/*
Represents gallery
*/


class Gallery
{
        /**
         * @var array files of gallery
         */

        private array $files = array();

        /**
         * Constructor
         * @param string $slozka file of gallery
         * @param string $column number of columns of gallery
         */
        public function __construct(private string $file, private int $column)
        {

        }
        public function read(): void
        {
                $file = dir($this->file);

                while ($item = $file->read()) {
                        //todo
                }
                $file->close();
        }
}