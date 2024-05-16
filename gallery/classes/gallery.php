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
                /**
                 * read file galery
                 * @return void
                 */


        }
        public function read(): void
        {
                $file = dir($this->file);

                while ($item = $file->read()) {
                        if (strpos($item, ' preview.') && is_file($this->file . '/' . $item)) {
                                $this->files[] = $item;
                        }
                }
                $file->close();
        }
        /**
         * Print gallery
         * @return void
         */

        public function printGallery(): void
        {
                echo ('<table id="gallery"><tr>');
                $oneColumn = 0;
                foreach ($this->files as $file) {
                        $preview = $this->file . '/' . $file;
                        $picture = $this->file . '/' . str_replace('_preview', '.', $file);
                        echo ('<td><a href="' . htmlspecialchars($picture) . '" rel="lightbox[galerie]"><img src="' . htmlspecialchars($preview) . '" alt=""></a></td>');
                        $oneColumn++;
                        if ($oneColumn >= $this->column) {
                                echo ('</tr><tr>');
                                $oneColumn = 0;
                        }
                }
                echo ('</tr></table>');

        }

}