<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function upload_images(Request $request, $productId)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('product_images', 'public');

            $image = ProductImage::create([
                'product_id' => $productId,
                'image' => $path,
                'order' => ProductImage::where('product_id', $productId)->max('order') + 1,
                'active' => true
            ]);

            return response()->json(['id' => $image->id]);
        }

        return response()->json(['error' => 'No image uploaded'], 400);
    }

    public function reorder_images(Request $request, $productId)
    {
        foreach ($request->order as $item) {
            ProductImage::where('id', $item['id'])->where('product_id', $productId)->update([
                'order' => $item['order']
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function delete_images(Request $request, $productId, $imageId)
    {
        $image = ProductImage::where('product_id', $productId)->where('id', $imageId)->firstOrFail();

        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return response()->json(['success' => true]);
    }
}
