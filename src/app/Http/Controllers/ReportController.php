<?php

namespace App\Http\Controllers;

use App\Models\Report;
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
        $reports = Report::all();

        return view('reports.index', [
            'reports' => $reports->latest(),
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
        return view('reports.create');
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
