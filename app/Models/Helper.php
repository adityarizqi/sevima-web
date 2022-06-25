<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    use HasFactory;

    public static function upload_image($path,$image){
        try {
            $imagePath = $path . '/' . sha1(rand() . "_" . time()) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $image->move($destinationPath, $imagePath);

            return $imagePath;
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-failed', $e->getMessage());
        }
    }

    public static function remove_image($path){
        try {
            unlink(public_path() . '/' . $path);
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-failed', $e->getMessage());
        }
    }

    public static function update_image($old_image_path,$new_image_path,$image){
        try {
            self::remove_image($old_image_path);
            return self::upload_image($new_image_path, $image);
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-failed', $e->getMessage());
        }
    }
}
