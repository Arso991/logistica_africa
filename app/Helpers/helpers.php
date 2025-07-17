<?php

use Illuminate\Support\Str;

if (!function_exists('generateOTP')) {
    function generateOTP($n)
    {
        $generator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789123abcdefghijklmnopqrstuvwxyz";
        $result = '';
        for ($i = 1; $i < $n; $i++) {
            $result .= substr($generator, (rand() % (strlen($generator)) - 1), 1);
        }
        return $result;
    }
}

function generateSecurePassword($length = 8)
{
    // Caractères possibles
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialCharacters = '!@#$%^&*()-_=+{}[]|:;<>,.?';

    // Assure qu'il y a au moins un caractère de chaque type
    $password = $uppercase[random_int(0, strlen($uppercase) - 1)] .
        $lowercase[random_int(0, strlen($lowercase) - 1)] .
        $numbers[random_int(0, strlen($numbers) - 1)] .
        $specialCharacters[random_int(0, strlen($specialCharacters) - 1)];

    // Ajoute des caractères aléatoires pour compléter la longueur
    $allCharacters = $uppercase . $lowercase . $numbers . $specialCharacters;
    $remainingLength = $length - strlen($password);

    for ($i = 0; $i < $remainingLength; $i++) {
        $password .= $allCharacters[random_int(0, strlen($allCharacters) - 1)];
    }

    // Mélange les caractères du mot de passe
    return str_shuffle($password);
}

if (!function_exists('folderOpen')) {
    function folderOpen($folderPath, $permissions = 0777)
    {
        if (!file_exists($folderPath)) {
            mkdir($folderPath, $permissions, true);
        }
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage($img, $name, $path)
    {
        $extension = $img->getClientOriginalExtension();

        //$folderName = time() . '-' . Str::slug($name);

        $uniqueName = time() . '-' . uniqid() . '-' . Str::slug($name);

        if (in_array($extension, ['pdf', 'svg', 'webp', 'jiff'])) { // Process based on file extension
            $img->move(public_path($path), $uniqueName . '.' . $extension);

            $imgurl = $path . $uniqueName . '.' . $extension;
        } else {
            $img = Image::make($img);

            $img->resize(640, 735, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $img->encode('webp', 75)->save($path . $uniqueName . '.webp');

            $imgurl = $path . $uniqueName . '.webp';
        }
        return $imgurl;
    }
}

if (!function_exists('deleteFile')) {
    function deleteFile($filePath)
    {
        if (file_exists($filePath)) {
            if (!empty($filePath)) {
                unlink($filePath);
            }
        }
    }
}

/** Delete file */

function deleteFileIfExist($filePath)
{
    try {
        if (\File::exists(public_path($filePath))) {
            \File::delete(public_path($filePath));
        }
    } catch (\Exception $e) {
        throw $e;
    }
}

/** Upload file */

function handleUpload($inputName, $model = null)
{
    try {
        if (request()->hasFile($inputName)) {
            if ($model && \File::exists(public_path($model->{$inputName}))) {
                File::delete(public_path($model->{$inputName}));
            }

            $file = request()->file($inputName);
            $fileName = rand() . $file->getClientOriginalName();
            $file->move(public_path('/uploads/pdf'), $fileName);

            $filePath = "/uploads/pdf/" . $fileName;

            return $filePath;
        }
    } catch (\Exception $e) {
        throw $e;
    }
}
