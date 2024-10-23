<div class="mb-5">
    <div class="card mb-5">
        <div class="card-header">Options</div>
        <div class="card-body">
            <ul>
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/dashboard/profile">Profile</a></li>
                @if(auth()->user()->isAdmin())
                    <li><a href="/dashboard/register">Add Member</a></li>
                    <li><a href="/dashboard/members">Members</a></li>
                    <li><a href="/dashboard/pending-topics">Pending Topics</a></li>
                    <li><a href="/clearCourses">Clear Courses</a></li>
                @endif
                @if(auth()->user()->isAdmin() || auth()->user()->userable->is_approve == 1)
                    <li><a href="/dashboard/upload">Upload File</a></li>
                    <li><a href="/dashboard/download-file-options">Download File</a></li>
                @endif
                @if(auth()->user()->isMember())
                    <li><a href="/tree">Topics</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
