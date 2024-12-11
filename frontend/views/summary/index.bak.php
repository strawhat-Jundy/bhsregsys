<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'summary_id',
        [
            'attribute' => 'Schedule_ID',
            'value' => function ($model) {
                return $model->schedule->Time_Schedule ?? 'N/A';
            },
            'label' => 'Schedule Time',
        ],
        [
            'attribute' => 'subject_id',
            'value' => function ($model) {
                return $model->subject->subject_name ?? 'N/A';
            },
            'label' => 'Subject',
        ],
        [
            'attribute' => 'teacher_id',
            'value' => function ($model) {
                return $model->teacher ? $model->teacher->first_name . ' ' . $model->teacher->last_name : 'N/A';
            },
            'label' => 'Teacher',
        ],
        [
            'attribute' => 'room_id',
            'value' => function ($model) {
                return $model->room ? $model->room->Room . ' (' . $model->room->Building . ')' : 'N/A';
            },
            'label' => 'Room',
        ],
        [
            'attribute' => 'status_id',
            'value' => function ($model) {
                return $model->status->Status ?? 'N/A';
            },
            'label' => 'Status',
        ],
        [
            'attribute' => 'weekday_id',
            'value' => function ($model) {
                return $model->weekday->Day ?? 'N/A';
            },
            'label' => 'Day',
        ],
        [
            'attribute' => 'student_ids',
            'value' => function ($model) {
                $studentNames = [];
                if ($model->student_ids) {
                    $studentIds = explode(',', $model->student_ids);
                    foreach ($studentIds as $studentId) {
                        $student = \frontend\models\TblOfficialStudents::findOne($studentId);
                        if ($student) {
                            $studentNames[] = $student->first_name . ' ' . $student->last_name;
                        }
                    }
                }
                return implode(', ', $studentNames) ?: 'N/A';
            },
            'label' => 'Students',
        ],
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, TblOfficialSummary $model, $key, $index, $column) {
                return Url::toRoute([$action, 'summary_id' => $model->summary_id]);
            },
        ],
    ],
]); ?>




<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // Display related Teacher full name
        [
            'attribute' => 'teacher_id',
            'value' => function ($model) {
                return $model->teacher 
                    ? $model->teacher->first_name . ' ' . $model->teacher->last_name 
                    : 'N/A'; // Adjust 'first_name' and 'last_name' to match your columns
            },
            'label' => 'Teacher',
        ],

        // Display related Room number and description
        [
            'attribute' => 'room_id',
            'value' => function ($model) {
                return $model->room 
                    ? $model->room->Room_Number . ' (' . $model->room->Description . ')' 
                    : 'N/A'; // Adjust 'Room_Number' and 'Description' to match your columns
            },
            'label' => 'Room',
        ],

        // Display related Student full name
        [
            'attribute' => 'student_id',
            'value' => function ($model) {
                return $model->student 
                    ? $model->student->first_name . ' ' . $model->student->last_name 
                    : 'N/A'; // Adjust 'first_name' and 'last_name' to match your columns
            },
            'label' => 'Student',
        ],

        // Display related Weekday
        [
            'attribute' => 'weekday_id',
            'value' => function ($model) {
                return $model->weekday 
                    ? $model->weekday->Day 
                    : 'N/A'; // Adjust 'Day' to match your column in weekdays table
            },
            'label' => 'Weekday',
        ],

        // Display related Time Schedule
        [
            'attribute' => 'time_id',
            'value' => function ($model) {
                return $model->time 
                    ? $model->time->Time_Schedule 
                    : 'N/A'; // Adjust 'Time_Schedule' to match your column in the time schedule table
            },
            'label' => 'Time',
        ],

        // Optional: Add additional columns as needed here

        // Action Column
        [
            'class' => 'yii\grid\ActionColumn',
            'urlCreator' => function ($action, $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]); // Adjust 'id' to match your primary key
            },
        ],
    ],
]); ?>
