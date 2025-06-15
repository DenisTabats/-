<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "turfirmas");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
//tours
function getToursInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM tours");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

//clients
function getClientsInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clients");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getOneClientInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clients WHERE IDclient = 1");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addClientsInfo($FIO, $passportData, $interPassportData, $statusVisa, $visaData)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT INTO clients (FIO, passportData, interPassportData, statusVisa, visaData) VALUES ('$FIO', '$passportData', '$interPassportData', '$statusVisa', '$visaData')");
    CloseDB();
    return $add;
}

function deleteClientsInfo($id)
{
    global $link;
    OpenDB();
    $delete=mysqli_query($link,"DELETE FROM clients WHERE IDclient=$id");
    CloseDB();
    return $delete;
}

function updateClientsInfo($id, $FIO, $passportData, $interPassportData, $statusVisa, $visaData)
{
    global $link;
    OpenDB();
    $update = mysqli_query($link, "UPDATE clients SET FIO = '$FIO', passportData = '$passportData', interPassportData = '$interPassportData', statusVisa = '$statusVisa', visaData = '$visaData' WHERE IDclient = $id");
    CloseDB();
    return $update;
}
//trips
function getTripsInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM trips");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

//orders
function getOrdersInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM orders");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getOneOrderInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM orders WHERE IDorder = 1");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addOrdersInfo($IDclient, $IDtrip, $dateOrder, $insuranceAmount, $status)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT INTO orders (IDclient, IDtrip, dateOrder, insuranceAmount, status) VALUES ($IDclient, $IDtrip, '$dateOrder', $insuranceAmount, '$status')");
    CloseDB();
    return $add;
}

function deleteOrdersInfo($id)
{
    global $link;
    OpenDB();
    $delete=mysqli_query($link,"DELETE FROM orders WHERE IDorder=$id");
    CloseDB();
    return $delete;
}

function updateOrdersInfo($id, $IDclient, $IDtrip, $dateOrder, $insuranceAmount, $status)
{
    global $link;
    OpenDB();
    $update = mysqli_query($link, "UPDATE orders SET IDclient = $IDclient, IDtrip = $IDtrip, dateOrder = '$dateOrder', insuranceAmount = $insuranceAmount, status = '$status' WHERE IDorder = $id");
    CloseDB();
    return $update;
}
//specialDiscounts
function getSpecialDiscountsInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM specialDiscounts");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

//clientsDiscounts
function getClientsDiscountsInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clientsDiscounts");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getOneClientDiscountsInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clientsDiscounts WHERE IDdiscount = 1");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addClientsDiscountsInfo($IDclient, $IDspecialDiscount, $dateOfUse)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT INTO clientsDiscounts (IDclient, IDspecialDiscount, dateOfUse) VALUES ($IDclient, $IDspecialDiscount, '$dateOfUse')");
    CloseDB();
    return $add;
}

function deleteClientsDiscountsInfo($id)
{
    global $link;
    OpenDB();
    $delete=mysqli_query($link,"DELETE FROM clientsDiscounts WHERE IDdiscount=$id");
    CloseDB();
    return $delete;
}

function updateClientsDiscountsInfo($id, $IDclient, $IDspecialDiscount, $dateOfUse)
{
    global $link;
    OpenDB();
    $update = mysqli_query($link, "UPDATE clientsDiscounts SET IDclient = $IDclient, IDspecialDiscount = $IDspecialDiscount, dateOfUse = '$dateOfUse' WHERE IDdiscount = $id");
    CloseDB();
    return $update;
}