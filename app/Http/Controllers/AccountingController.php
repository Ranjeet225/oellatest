<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentsLink;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payment;
use App\Models\Student;

class AccountingController extends Controller
{
    //


        public function getFeesByMasterService($master_service) {
            $user = Auth::user();
            $query = PaymentsLink::with('payments')
                ->whereHas('payments', function($query) {
                    $query->where('payment_status', 'success');
                })
                ->wherein('master_service',[$master_service]);
            if ($user->hasRole('Administrator')) {
                return $query->sum('amount');
            }
            $userId = $user->id;
            if ($user->hasRole('agent')) {
                $usersId = User::where('added_by', $userId)
                    ->whereNotIn('admin_type', ['student'])
                    ->pluck('id')
                    ->toArray();
                if (!empty($usersId)) {
                    $usersId[] = $userId;
                }
                return $query->whereIn('user_id', $usersId)->sum('amount');
            }
            return $query->where('user_id', $userId)->sum('amount');
        }
        public function getFeesByMasterServiceByMonth($master_service, $month = 1) {
            $user = Auth::user();
            $query = PaymentsLink::with('payments')
                ->whereHas('payments', function($query) use ($month) {
                    $query->where('payment_status', 'success');
                    if ($month) {
                        $query->whereMonth('created_at', $month);
                    }
                })
                ->wherein('master_service',[$master_service]);
            if ($user->hasRole('Administrator')) {
                return $query->sum('amount');
            }
            $userId = $user->id;
            if ($user->hasRole('agent')) {
                $usersId = User::where('added_by', $userId)
                    ->whereNotIn('admin_type', ['student'])
                    ->pluck('id')
                    ->toArray();
                if (!empty($usersId)) {
                    $usersId[] = $userId;
                }
                return $query->whereIn('user_id', $usersId)->sum('amount');
            }
            return $query->where('user_id', $userId)->sum('amount');
        }
        public function index()
        {
            $fees = [
                'oel_registration_fees' => $this->getFeesByMasterService(1),
                'university_application_fees' => $this->getFeesByMasterService(2),
                'course_tution_fees' => $this->getFeesByMasterService(3),
                'visa_processing_fees' => $this->getFeesByMasterService(4),
                'embassy_fees' => $this->getFeesByMasterService(5),
                'accommodation_fees' => $this->getFeesByMasterService(6),
                'ticket_fees' => $this->getFeesByMasterService(7),
                'english_test' => $this->getFeesByMasterService(8),
                'total_amount' => $this->getFeesByMasterService(1) + $this->getFeesByMasterService(2)+ $this->getFeesByMasterService(3)+ $this->getFeesByMasterService(4)+ $this->getFeesByMasterService(5)+ $this->getFeesByMasterService(6)+ $this->getFeesByMasterService(7)+ $this->getFeesByMasterService(8),
            ];
            $feesMonthly = [];
            for($i=1; $i<=12; $i++){
                $feesMonthly[$i] = [
                    'oel_registration_fees' => $this->getFeesByMasterServiceByMonth(1, $i),
                    'university_application_fees' => $this->getFeesByMasterServiceByMonth(2, $i),
                    'course_tution_fees' => $this->getFeesByMasterServiceByMonth(3, $i),
                    'visa_processing_fees' => $this->getFeesByMasterServiceByMonth(4, $i),
                    'embassy_fees' => $this->getFeesByMasterServiceByMonth(5, $i),
                    'accommodation_fees' => $this->getFeesByMasterServiceByMonth(6, $i),
                    'ticket_fees' => $this->getFeesByMasterServiceByMonth(7, $i),
                    'english_test' => $this->getFeesByMasterServiceByMonth(8, $i),
                ];
            }
            return view('admin.accounting.index', compact('fees', 'feesMonthly'));
        }
        public function student_review(Request $request)
        {
            $query = Student::where('status_threesixty',1);
            if ($request->has('first_name')) {
                $query->where('first_name', 'like', '%' . $request->first_name . '%');
            }
            if ($request->has('email')) {
                $query->where('email', 'like', '%' . $request->email . '%');
            }
            if ($request->has('phone_number')) {
                $query->where('phone_number', 'like', '%' . $request->phone_number . '%');
            }
            $students = $query->Select('first_name','email','phone_number','gender','id','user_id','added_by')->paginate(12);
            return view('admin.accounting.student-reviews',compact('students'));
        }

        public function student_view($id)
        {
            $student=Student::with('country')->where('id',$id)->first();
            $payments=Payment::with(['PaymentLink' => function($query) {
                $query->with(['master_services' => function($query) {
                    $query->select('name','id','amount');
                }]);
            }])->where('payment_status','success')->where('user_id',$student->user_id)->get();
            return view('admin.accounting.student-view',compact('student','payments'));
        }


}
