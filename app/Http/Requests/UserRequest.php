<?php
/**
 * FormRequest
 *
 * @category Controller
 * @package  Laravel
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Requests;

use App\Http\Requests\Request;
/**
 * UserRequest
 *
 * @category  Model
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
