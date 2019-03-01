<?php

namespace App\Http\Middleware;

use Closure;

class verifylogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           
                // Lấy kiểu ngôn ngữ được lưu trong Session, nếu không có thì trả về default lấy trong config
                $loged = Session::get('login', false);
                
                if ($loged) {
                    return redirect()->route('blog.index');
                };

                return $next($request);
            }
        
        
    }
}