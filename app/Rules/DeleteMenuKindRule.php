<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\RestMenuKind;
class DeleteMenuKindRule implements Rule
{
    protected $menu_kind;
    private $messages;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($menu_kind_id)
    {
        //
        
        $this->$menu_kind = RestMenuKind::findOrFail($menu_kind_id);
        // $this->menu_kind = $menu_kind;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        dd(123);
        if (count($this->menu_kind->menus) > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'メニュー種類にメニューがあるため、削除できません。';
    }
}
