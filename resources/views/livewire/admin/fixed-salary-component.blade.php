<div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h2><strong>Fixed Salary</strong></h2>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Work Hours</th>
                                    <th>Salary amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->user->name }}</td>
                                        <td>{{ floor($workTimes[$employee->id]['hours']) }}</td>
                                        <td>{{ number_format($workTimes[$employee->id]['salary']) }} So'm</td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4" align="center"></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
