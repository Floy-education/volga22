<?php

namespace App\Service\Image;

use App\AbstractEntity\BaseAbstractService;
use App\Entity\Image;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService extends BaseAbstractService
{
    /**
     * @param string $path
     * @return Image
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function devUpload(string $path): Image
    {
        $rawName = explode('/', $path);
        $name = end($rawName);
        $file = new UploadedFile($this->getParameter('projectDir') . "/assets/images/{$path}", $name,null, null,true);
        return $this->upload($file, true);
    }

    /**
     * @param UploadedFile $file
     * @param bool $fixture
     * @return Image
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function upload(UploadedFile $file, bool $fixture = false): Image
    {
        $publicDir = $this->getParameter('publicDir');

        $fileName = md5($file->getClientOriginalName() . rand(1, 9999) . time());

        if ($fixture){
            $temp = $file->getPath() . "/" . $file->getClientOriginalName();
            $path = "$publicDir/media/images/" . "{$fileName}.{$file->getExtension()}";
            if (!is_dir("$publicDir/media/images")){
                mkdir(dirname($path), 0777, true);
            }
            copy($temp, "$publicDir/media/images/" . "{$fileName}.{$file->getExtension()}");
        }
        else{
            $file->move("$publicDir/media/images", "{$fileName}.{$file->getClientOriginalExtension()}");
        }

        $image = new Image();

        $image->setPath("/media/images/");
        $image->setFileName($fileName);

        if ($fixture) {
            $image->setExtension($file->getExtension());
        }
        else{
            $image->setExtension($file->getClientOriginalExtension());
        }

        $image->setMimeType($file->getClientMimeType());

        $image->setSize(0);

        $this->entityManager->persist($image);

        $this->entityManager->flush();

        return $image;
    }
}