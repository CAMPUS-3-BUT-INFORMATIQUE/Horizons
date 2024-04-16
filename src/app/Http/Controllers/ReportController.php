<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportType;
use Carbon\Carbon;
use App\Models\ReportDecision;
use App\Models\ReportParticipant;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Show the list of reports.
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function reports(Request $request)
    {
        $report_types = ReportType::all();
        $reports = Report::all();

        return view('reports.index', [
            'report_types' => $report_types,
            'headers' => [
                __('Type'),
                __('Intitulé'),
                __('Ordre du jour'),
                __('Date'),
                __('Actions')
            ],
            'reports' => $reports,
            // 'reports' => [
            //     'headers' => [
            //         __('Date'),
            //         __('Intitulé'),
            //         __('Ordre du jour'),
            //         __('Actions')
            //     ],
            //     'rows' => $reports->map(function ($report) {
            //         return [
            //             $report->start_date->format('d/m/Y'),
            //             $report->title(),
            //             $report->report_agenda,
            //             [
            //                 'edit' => route('reports.edit', $report),
            //                 'delete' => route('reports.delete', $report),
            //             ],
            //         ];
            //     }),
            // ],
        ]);
    }

    /**
     * Show a report.
     * 
     * @param Request $request
     * @param Report $report
     * @return \Illuminate\View\View
     */
    public function show(Request $request, Report $report)
    {
        return view('reports.show', [
            'report' => $report,
        ]);
    }

    /**
     * Create a report.
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $participants = User::all();
        $descisions = ReportDecision::all();
        return view('reports.create', [
            'participants' => $participants,
            'decisions' => $descisions,
        ]);
    }

    /**
     * Store a report.
     * 
     * @param Request $request
     * @param Report $report
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Report $report = null)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'report_agenda' => 'required|string',
            'decisions' => 'required|string',
            'conclusions' => 'string',
            'comments' => 'string',
        ]);

        if ($report) {
            $report->update($validated);
        } else {
            $report = Report::create($validated);
        }

        return redirect()->route('reports.show', $report);
    }

    /**
     * Edit a report.
     * 
     * @param Request $request
     * @param Report $report
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, Report $report)
    {
        return view('reports.edit', [
            'report' => $report,
        ]);
    }

    /**
     * Update a report.
     * 
     * @param Request $request
     * @param Report $report
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Report $report)
    {
        return $this->store($request, $report);
    }

    /**
     * Delete a report.
     * 
     * @param Request $request
     * @param Report $report
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request, Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index');
    }
}
