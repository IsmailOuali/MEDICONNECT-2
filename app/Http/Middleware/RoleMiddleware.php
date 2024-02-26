<?php

namespace App\Http\Middleware;

use App\Models\Medicament;
use App\Models\SpecialiteMedical;
use Illuminate\Database\Eloquent\Model;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('login');
        }
        
        if (in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }
        

        
        $medicaments = Medicament::all();
        $specialities = SpecialiteMedical::all();

        session(['medicaments' => $medicaments, 'specialities' => $specialities]);

        switch (auth()->user()->role) {
            case 1: // Patient
                return redirect('/welcome');
                break;
            case 2: // Medecin
                return redirect()->route('doc-dashboard');
                break;
            case 3: // Admin
                return redirect('/dashboard', compact('medicaments', 'specialities'));
                break;
            default:
                return redirect('/');
                break;
        }
    }   
}
