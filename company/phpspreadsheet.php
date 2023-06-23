<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require '../vendor/autoload.php';
    session_start();
    $fullname = $_SESSION['name'];

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $spreadsheet = new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)->setCellValue('A1', 'HISTORY TRANSACTION');
    $spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
    $spreadsheet->getActiveSheet()->mergeCells('A1:H1');
    $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');

    $spreadsheet->getActiveSheet()
            ->setCellValue('A3','No')
            ->setCellValue('B3','Transaction ID')
            ->setCellValue('C3','Course ID')
            ->setCellValue('D3','Course Name')
            ->setCellValue('E3','Customer')
            ->setCellValue('F3','Timestamp')
            ->setCellValue('G3','Quantity')
            ->setCellValue('H3','Price');

    $spreadsheet->getActiveSheet()->getStyle('A1:H3')->getFont()->setBold(true);

    include '../connection.php';
    $sql = "SELECT * FROM detail_transaction INNER JOIN header_transaction ON detail_transaction.id_header_transaction = header_transaction.id_header_transaction INNER JOIN course ON detail_transaction.course_id = course.id WHERE detail_transaction.company='$fullname'";
    $result = mysqli_query($connection, $sql);

    $id = 1; $rowID = 4; $total_quantity = 0; $total_price = 0;
    foreach ($result as $transaction) {
        $spreadsheet->getActiveSheet()
            ->setCellValue('A'.$rowID, $id++)
            ->setCellValue('B'.$rowID, $transaction['id_header_transaction'])
            ->setCellValue('C'.$rowID, $transaction['course_id'])
            ->setCellValue('D'.$rowID, $transaction['course_name'])
            ->setCellValue('E'.$rowID, $transaction['customer'])
            ->setCellValue('F'.$rowID, $transaction['date']." ".$transaction['time'])
            ->setCellValue('G'.$rowID, $transaction['quantity'])
            ->setCellValue('H'.$rowID, $transaction['price']);

            $total_quantity += $transaction['quantity'];
            $total_price += $transaction['price'];

            //mengatur row height
            $spreadsheet->getActiveSheet()->getRowDimension($rowID)->setRowHeight(50);
            $rowID++;
        }

        $spreadsheet->getActiveSheet()
        ->setCellValue('F'.$rowID, 'Total')
        ->setCellValue('G'.$rowID, $total_quantity)
        ->setCellValue('H'.$rowID, $total_price);

        foreach(range('A','H') as $columnID){
            $spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);

        }

        $border = array(
            'allBorders' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
            )
            );
        $spreadsheet->getActiveSheet()->getStyle('A3'.':H'.($rowID-1))
                    ->getBorders()->applyFromArray($border);

        $alignment = array(
            'alignment' => array(
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            )
            );
            $spreadsheet->getActiveSheet()->getStyle('A3'.':H'.($rowID-1))->applyFromArray($alignment);

        $filename = 'transactions.xlsx';
        $objWriter = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $objWriter->save('../data/'.$filename);
        header('location: ../data/'.$filename);
        exit;
