<?php

namespace App\Http\Controllers\Form;

use App\HomeMail;
use App\AppointmentMail;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function home_form(Request $request){

        $request->validate([
            'pic_1' => 'nullable'
        ]);

        if($request->file('pic_1'))
        {
            $pic_1 = $request->file('pic_1');
            $pic_1name = time() . '.' . $request->file('pic_1')->extension();
            $pic_1Path = public_path() . '/piano/image/';
            $pic_1->move($pic_1Path, $pic_1name);
        }

        $home = new HomeMail();

        $home->shop_number = $request->shop_number;
        $home->lead_name = $request->lead_name;
        $home->f_name = $request->f_name;
        $home->f_name = $request->f_name;
        $home->l_name = $request->l_name;
        $home->phone = $request->phone;
        $home->email = $request->email;
        $home->zip = $request->zip;
        $home->location = $request->location;
        $home->day_time_drop_off = $request->day_time_drop_off;
        $home->day_time_drop_off_2 = $request->day_time_drop_off_2;
        $home->stairs = $request->stairs;
        $home->piano_size = $request->piano_size;
        $home->event_piano = $request->event_piano;
        $home->how_many = $request->how_many;

        $home->designer = $request->designer;
        $home->poc = $request->poc;
        $home->ml = $request->ml;
        $home->mlh = $request->mlh;
        $home->bs = $request->bs;

        $home->pic_1 = $pic_1name;

        $home->serial_number = $request->serial_number;
        $home->model_number = $request->model_number;
        $home->manufacturer = $request->manufacturer;
        $home->storage_term = $request->storage_term;

        $home->move_from = $request->move_from;
        $home->move_to = $request->move_to;

        $home->address = $request->address;
        $home->piano_type = $request->piano_type;
        $home->level_of_piano = $request->level_of_piano;
        $home->specific_brand = $request->specific_brand;
        $home->price_range = $request->price_range;
        $home->price_range = $request->price_range;
        $home->details = $request->details;
        $home->save();


        // $data = [
        //     'f_name' => $request->get('l_name'),
        //     'l_name' => $request->get('l_name'),
        //     'phone'  => $request->get('phone'),
        //     'email'  => $request->get('email'),
        //     'phone'  => $request->get('phone'),
        //     'mobile' => $request->get('mobile'),
        //     'street' => $request->get('street'),
        //     'zip'    => $request->get('zip'),
        //     'place'  => $request->get('place'),

        //     ];


        //     $pdf = PDF::loadView('mail.homedoc', $data);

        //     Mail::send('mail.homemail', $data, function($message) use ($data, $pdf)
        //     {
        //     $message->from('donotreply@pianonation.com', 'PianoNation');
        //     $message->to($data['insurance_email']);

        //     $message->attach(public_path('pdfs/mail/'.$data['home_doc']), [
        //         'as' => 'home_doc',
        //         'mime' => 'application/pdf',
        //    ]);
        //       $message->subject('Inquiry Mail')
        //                ->attachData($pdf->output(), "Contact.pdf");
        //     });

        return redirect()->back()->with('message','Mail Sent');

    }

    function non_im(Request $request){

        $home = new HomeMail();

        $home->shop_number = $request->shop_number;
        $home->lead_name = $request->lead_name;
        $home->f_name = $request->f_name;
        $home->f_name = $request->f_name;
        $home->l_name = $request->l_name;
        $home->phone = $request->phone;
        $home->email = $request->email;
        $home->zip = $request->zip;
        $home->location = $request->location;
        $home->day_time_drop_off = $request->day_time_drop_off;
        $home->day_time_drop_off_2 = $request->day_time_drop_off_2;
        $home->stairs = $request->stairs;
        $home->piano_size = $request->piano_size;
        $home->event_piano = $request->event_piano;

        $home->option = $request->option;

        $home->designer = $request->designer;
        $home->poc = $request->poc;
        $home->ml = $request->ml;
        $home->mlh = $request->mlh;
        $home->bs = $request->bs;


        $home->serial_number = $request->serial_number;
        $home->model_number = $request->model_number;
        $home->manufacturer = $request->manufacturer;

        $home->move_from = $request->move_from;
        $home->move_to = $request->move_to;

        $home->address = $request->address;
        $home->piano_type = $request->piano_type;
        $home->level_of_piano = $request->level_of_piano;
        $home->specific_brand = $request->specific_brand;
        $home->price_range = $request->price_range;
        $home->price_range = $request->price_range;
        $home->details = $request->details;
        $home->save();




        //     Mail::send('mail.homemail', $data, function($message) use ($data, $pdf)
        //     {
        //     $message->from('donotreply@pianonation.com', 'PianoNation');
        //     $message->to($data['insurance_email']);

        //     $message->attach(public_path('pdfs/mail/'.$data['home_doc']), [
        //         'as' => 'home_doc',
        //         'mime' => 'application/pdf',
        //    ]);
        //       $message->subject('Inquiry Mail')
        //                ->attachData($pdf->output(), "Contact.pdf");
        //     });

        return redirect()->back()->with('message','Mail Sent');
    }


    function app_mail(Request $request){

        $home = new AppointmentMail();

        $home->shop_number = $request->shop_number;
        $home->lead_name = $request->lead_name;
        $home->f_name = $request->f_name;
        $home->l_name = $request->l_name;
        $home->phone = $request->phone;
        $home->email = $request->email;
        $home->zip = $request->zip;
        $home->address = $request->address;
        $home->day = $request->day;
        $home->start = $request->start;
        $home->end = $request->end;
        $home->virtual_platform = $request->virtual_platform;
        $home->level_of_piano = $request->level_of_piano;
        $home->specific_brand = $request->specific_brand;
        $home->details = $request->details;
        $home->save();




        //     Mail::send('mail.homemail', $data, function($message) use ($data, $pdf)
        //     {
        //     $message->from('donotreply@pianonation.com', 'PianoNation');
        //     $message->to($data['insurance_email']);

        //     $message->attach(public_path('pdfs/mail/'.$data['home_doc']), [
        //         'as' => 'home_doc',
        //         'mime' => 'application/pdf',
        //    ]);
        //       $message->subject('Inquiry Mail')
        //                ->attachData($pdf->output(), "Contact.pdf");
        //     });

        return redirect()->back()->with('message','Mail Sent');
    }


}
