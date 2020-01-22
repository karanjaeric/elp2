<?php

namespace App\Exports;

use App\User;
use App\Meeting;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class AttendeesExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
        use Exportable;
        /**
        * @return \Illuminate\Database\Query\Builder
        */
        //Intializes the class and assigns Meetings to  a value
            public function __construct(int $MeetingId)
            {
              $this->meetingid = $MeetingId;
            }
        //Runs a query which returns confirmed attendees for the meeting.
            public function query(){
              return Meeting::with('attendees')->where('id',$this->meetingid);
            }
        //Maps the returned query array to the excel rows
            public function map($Meeting): array
            {
              $rows = [];
                foreach($Meeting->attendees as $attendee)
                {
                  $rows[]= [
                    $attendee->firstname,
                    $attendee->lastname,
                    $attendee->email,
                    $attendee->phonenumber,
                    $attendee->university,
                    $attendee->course,
                  ];
                }
              return $rows;
            }
        //Creates a header for the excel data created
              public function headings(): array
              {
                return [
                  'First Name',
                  'Last Name',
                  'Email',
                  'Phone Number',
                  'University',
                  'Course',
                ];
              }

}
