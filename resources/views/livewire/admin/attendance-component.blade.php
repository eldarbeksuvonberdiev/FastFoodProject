<div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h2><strong>Attendance</strong></h2>
                        <input type="date" class="form-control mt-3 mb-3" id="dateInput" name=""
                            wire:change="changeDate($event.target.value)">
                        <h4 class="text-primary mt-2 mb-2">{{ $date->format('F Y') }}</h4>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    @foreach ($days as $day)
                                        <th>{{ $day->format('d') }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->user->name }}</td>
                                        @foreach ($days as $day)
                                            @php
                                                $userAttendance = $employee->checks($day->format('Y-m-d'));
                                            @endphp
                                            {{-- <td wire:click="inputView('{{ $student->id }}','{{ $day->format('Y-m-d') }}')">
                                                @if ($talabaId == $student->id && $attendanceDate == $day->format('Y-m-d'))
                                                    <input type="text" style="width: 30px;" autofocus
                                                        value="{{ $userAttendance->value ?? '' }}"
                                                        wire:keydown.enter="createAttendance('{{ $student->id }}','{{ $day->format('Y-m-d') }}',$event.target.value)">
                                                @else
                                                    @if ($userAttendance)
                                                        <span
                                                            class="text-{{ $userAttendance->value == '+' ? 'primary' : 'danger' }}">{{ $userAttendance->value }}</span>
                                                    @endif
                                                @endif
                                            </td> --}}
                                        @endforeach
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ count($days) + 2 }}" align="center">No data available</td>
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
