<?
class Gallery
{
        public function __construct(private string $file, private int $column)
        {

        }
        public function read():void
                {
                        $file = dir($this->file);

                        while ($item = $file->read())
                        {
                                //todo
                        }
                        $file->close();
                }
}