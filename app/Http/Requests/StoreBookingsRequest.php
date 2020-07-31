<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'room_id' => 'required',
//            'start_at' => 'required|date_format:'.config('app.date_format').' H:i',
//            'end_at' => 'required|date_format:'.config('app.date_format'). ' H:i',
//            'start_at' => 'required|date_format:',
//            'end_at' => 'required|date_format:',
            'notes' => 'required',
        ];
    }
}
