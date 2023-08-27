<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User;

class LivretController extends Controller
{
    public function saveSignature(Request $request)
    {
        $request->validate([
            'signature_data' => 'required',
        ]);

        $user = auth()->user();
        $user->signature = $request->input('signature_data');
        //$user->save();

        return response()->json(['message' => 'Signature saved successfully.']);
    }

    public function printLivret()
    {
        $user = auth()->user();

        if (!$user->signature) {
            return response()->json(['error' => 'You must provide a virtual signature before printing.'], 400);
        }

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('livret.pdf', ['user' => $user]);

        // Generate the PDF contents as a string
        $pdfContents = $pdf->output();

        // Save the PDF contents to a file
        $pdfPath = storage_path('app/public/livret.pdf');
        file_put_contents($pdfPath, $pdfContents);

        return response()->json(['message' => 'Livret PDF generated successfully.']);
    }
}
