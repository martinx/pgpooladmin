<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in English
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Permission to use, copy, modify, and distribute this software and
 * its documentation for any purpose and without fee is hereby
 * granted, provided that the above copyright notice appear in all
 * copies and that both that copyright notice and this permission
 * notice appear in supporting documentation, and that the name of the
 * author not be used in advertising or publicity pertaining to
 * distribution of the software without specific, written prior
 * permission. The author makes no representations about the
 * suitability of this software for any purpose.  It is provided "as
 * is" without express or implied warranty.
 *
 * @author     Ryuma Ando <ando@ecomas.co.jp>
 * @copyright  2003-2008 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'en',
    'strLang' => 'English',
    'descBackend_hostname' => 'The real PostgreSQL server name pgpool could connect',
    'descBackend_port' => 'The port number where real PostgreSQL server is running on',
    'descBackend_socket_dir' => 'The socket directory PostgreSQL could connect',
    'descBackend_weight' => 'Load balance weight when pgpool is running in the state of load balance mode',
    'descBackend_data_directory' => 'PostgreSQL database directory',
    'descChild_life_time' => 'Life of an idle child process in seconds',
    'descChild_max_connections' => 'If child_max_connections connections were received, child exits',
	'descClient_idle_limit' => 'Timeout in seconds while waiting for a query from a client',
	'descAuthentication_timeout' => 'Maximum time in seconds to complete client authentication',
    'descConnection_cache' => 'If true, cache connections to PostgreSQL',
    'descConnection_life_time' => 'Life time for each idle connection in seconds',
    'descEnable_pool_hba' => 'Use host-based authentication',
    'descEnable_query_cache' => 'Perform query cache',
    'descFailover_command' => 'Command to be executed when detaching a node',
    'descFailback_command' => 'Command to be executed when attaching a node',
    'descHealth_check_period' => 'Specifies the interval for next health checking. 0 means no health checking',
    'descHealth_check_timeout' => 'Pgpool does "health check" periodically to detect PostgreSQL servers down, network communication problems or as such',
    'descHealth_check_user' => 'PostgreSQL user name for the health checking',
    'descIgnore_leading_white_space' => 'If true, ignore leading white spaces of each query while pgpool judges if the query is a SELECT so that it can be load balanced',
    'descInsert_lock' => ' If you replicate a table having SERIAL data type column, sometimes the serial value does not match between servers',
    'descListen_addresses' => 'Specifies the addresses to listen on for TCP/IP connections',
    'descLoad_balance_mode' => 'Perform load balancing for SELECT',
	'descLog_connections' => 'If true, incoming connections will be printed to the log',
	'descLog_hostname' => 'If true, client\'s hostname will be shown in ps status and in a connection log if log_connections is true',
    'descLog_statement' => 'If true, print all statements to the log',
    'descLogdir' => 'The directory name to store pgpool\'s log files',
    'descMaster_slave_mode' => 'Run in master/slave mode',
    'descMax_pool' => 'Number of connection pools each pgpool server process are keeping',
    'descNum_init_children' => 'Number of pgpool processes initially forked',
    'descParallel_mode' => 'Run in parallel mode',
    'descPcp_port' => 'The port number where pcp is running on',
    'descPcp_socket_dir' => 'The socket directory pcp could connect',
    'descPcp_timeout' => 'When there is no response in this time from client, it disconnects and stop',
    'descPgpool2_hostname' => 'Pgpool2 server name where running on',
    'descPort' => 'The port number where pgpool is running on',
    'descPrint_timestamp' => 'If true, timestamp is added to each log line',
	'descRecovery_user' => 'PostgreSQL user name for online recovery',
	'descRecovery_password' => 'PostgreSQL user password for online recovery',
    'descRecovery_1st_stage_command' => 'Recovery command to be excuted on the first stage',
    'descRecovery_2nd_stage_command' => 'Recovery command to be excuted on the second stage',
    'descRecovery_timeout' => 'Number of seconds to wait for online recovery to complete. 0 means no wait',
    'descReplication_mode' => 'Set this to true if you are going to use replication functionality',
    'descReplication_stop_on_mismatch' => 'Stop replication mode on data mismatch between master and secondary',
	'descReplicate_select' => 'If true, replicate SELECT queries. If false, send only to master ',
    'descReplication_timeout' => 'In non strict replication mode, there will be a risk of deadlock',
    'descReset_query_list' => 'Semicolon separated SQL commands to be issued at the end of session',
    'descSocket_dir' => 'The socket directory pgpool could connect',
    'descSystem_db_dbname' => 'The database name of system database',
    'descSystem_db_hostname' => 'The server name system database running on',
    'descSystem_db_password' => 'The password of system database who connects system database',
    'descSystem_db_port' => 'The port number system database could connect',
    'descSystem_db_schema' => 'The schema name of system database',
    'descSystem_db_user' => 'The username when connection system database',
    'errAlreadyExist' => 'It already exists.',
    'errFileNotExecutable' => 'File not executable',
    'errFileNotFound' => 'File not found',
    'errFileNotWritable' => 'File not writable',
    'errIllegalHostname' => 'Illegal hostname',
	'errIllegalPipe' => 'Pipe destination is invalid',
    'errInputEverything' => 'Please input all items',
    'errNoDefined' => 'No defined parameter',
    'errNotSameLength' => 'The array length of col_list is not corresponding to that of type_list. It should be the same number of elements.',
    'errPasswordMismatch' => 'The passwords mismatch',
    'errRequired' => 'This is required',
    'errShouldBeInteger' => 'This should be an integer',
    'errShouldBeZeroOrMore' => 'This should be 0 or more',
    'errSingleQuotation' => 'Please enclose the array element with a single quotation.',
    'msgDeleteConfirm' => 'Do you really want to delete it?',
    'msgMasterDbConnectionError' => 'Master DB connection failed',
    'msgPgpoolConfNotFound' => 'pgpool.conf not found',
    'msgPleaseSetup' => 'No found configuration file. Please execute the setup.',
    'msgReloadPgpool' => 'Do you really want to reload configuration files?',
    'msgRestart' => 'Please restart to reflect the change',
    'msgRestartPgpool' => 'Do you really want to restart pgpool?',
    'msgSameAsPasswordFile' => 'The value is the same as item Password File',
    'msgSameAsPgpoolFile' => 'The value is the same as item pgpool.conf File',
    'msgStopPgpool' => 'Do you really want to stop pgpool?',
    'msgUpdateComplete' => 'Update complete',
    'msgUpdateFailed' => 'Update failed',
    'strAdd' => 'Add',
    'strAdminPassword' => 'Password',
    'strBack' => 'Back',
    'strCancel' => 'Cancel',
    'strChangePassword' => 'Change Password',
    'strClear' => 'Clear',
    'strClearQueryCache' => 'Clear Query Cache',
    'strCmdC' => 'Clears query cache',
    'strCmdD' => 'Debug mode',
    'strCmdDesc' => 'If it is a blank, this option is ignored.',
    'strCmdM' => 'Stop mode',
    'strCmdN' => 'Don\'t run in daemon mode',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => 'Column list',
    'strColName' => 'Column name of distributed key',
    'strCommon' => 'Common',
    'strConnectionError' => 'Connection error',
    'strConnTime' => 'Connection create time',
    'strConnUsed' => 'Use of connection',
    'strConnUser' => 'Username',
    'strCreateTime' => 'Create time',
    'strDataError' => 'Data error',
    'strDateFormat' => 'M j G:i:s T Y',
    'strDb' => 'Database',
    'strDbName' => 'Database Name',
    'strDebug' => 'Debug Mode',
    'strDelete' => 'Delete',
    'strDeleted' => 'lines were deleted',
    'strDetail' => 'Detail',
    'strDetailInfo' => 'Detail Infomation',
    'strDisconnect' => 'Disconnect',
    'strDistDefFunc'=> 'Distributed Function Name',
    'strDown' => 'Down',
    'strError' => 'Error',
    'strErrorCode' => 'Error Code',
    'strErrorMessage' => 'Error Message',
    'strExecute' => 'Execute',
    'strFeature' => 'Feature',
    'strHealthCheck' => 'Health Check',
    'strHelp' => 'Help',
    'strInvalidation' => 'Invalidation',
    'strIPaddress' => 'IP Address',
    'strLanguage' => 'Language',
    'strLoadBalanceMode' => 'Load Balance Mode',
    'strLog' => 'Log',
    'strLogin' => 'Login',
    'strLoginName' => 'Login Name',
    'strLogout' => 'Logout',
    'strMasterServer' => 'Master Server',
    'strMeasures' => 'Measures',
    'strNodeInfo' => 'Node Info.',
    'strNodeStatus' => 'Node Status',
    'strNodeStatus1' => 'Up. Disconnect',
    'strNodeStatus2' => 'Up. Connected',
    'strNodeStatus3' => 'Down',
    'strNoNode' => 'There is no node',
    'strOff' => 'Off',
    'strOn' => 'On',
    'strParallelMode' => 'Parallel Mode',
    'strParameter' => 'Parameter',
    'strPassword' => 'Password',
    'strPasswordConfirmation' => 'Password Confirmation',
    'strPasswordFile' => 'Password File',
    'strPcpConfFile' => 'pcp.conf File',
    'strPcpDir' => 'PCP Directory',
    'strPcpHostName' => 'PCP Hostname',
    'strPcpRefreshTime' => 'Refresh Time',
    'strPcpTimeout' => 'PCP Timeout',
    'strPgConfFile' => 'pgpool.conf File',
    'strPgConfSetting' => 'pgpool.conf Setting',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'pgpool Command',
    'strPgpoolCommandOption' => 'pgpool Command Option',
    'strPgpoolLogFile' => 'pgpool log destination',
    'strPgpoolManagementSystem' => 'pgpool-II Management System',
    'strPgpoolServer' => 'pgpool-II Server',
    'strPgpoolStatus' => 'pgpool Status',    
    'strPgpoolSummary' => 'Summary',
    'strPleaseWait' => 'Please wait...',
    'strPort' => 'Port',
    'strProcId' => 'Process ID',
    'strProcInfo' => 'Process Info.',
    'strProcTime' => 'Process Start Time',
    'strProtocolMajorVersion' => 'Protocol Major Version',
    'strProtocolNinorVersion' => 'Protocol Minor Version',
    'strQueryCache' => 'Query Cache',
    'strQueryStr' => 'Query',
    'strReloadPgpool' => 'Reload',
    'strReplicationMode' => 'Replication Mode',
    'strReset' => 'Reset',
    'strRestart' => 'Restart',
    'strRestartOption' => 'pgpool Restart Option',
    'strRestartPgpool' => 'Restart pgpool',
    'strReturn' => 'Return',
    'strRecovery' => 'Recovery',
    'strSchemaName' => 'Schema Name',
    'strSearch' => 'Search',
    'strSecondaryServer' => 'Secondary Server',
    'strSetting' => 'pgpoolAdmin Setting',
    'strSetup' => 'Setup',
    'strStartOption' => 'Start Option',
    'strStartPgpool' => 'Start pgpool',
    'strStatus' => 'Status',
    'strStopOption' => 'pgpool Stop Option',
    'strStopPgpool' => 'Stop pgpool',
    'strSummary' => 'Summary',
    'strSystemDb' => 'Partitioning Rule',
    'strTable' => 'Table',
    'strTypeList' => 'Type List of Column',
    'strUp' => 'Up',
    'strUpdate' => 'Update',
    'strValue' => 'Value',
    'strWeight' => 'Weight',
    'e1' => 'pgmgt.conf.php not found.',
    'e2' => 'Message catalog not found.',
    'e3' => 'PCP command error occurred.',
    'e4' => 'pgpool.conf not found.',
    'e5' => 'Smarty template file not found.',
    'e6' => 'Help not found.',
    'e8' => 'pcp_timeout not found in pgpool.conf',
    'e9' => 'pcp_timeout not found in pgpool.conf',
    'e7' => 'Parameter not found in pgpmgt.conf.php',
    'e1001' => 'PCP command error occurred.',
    'e1002' => 'pcp_node_count command error occurred.',
    'e1003' => 'pcp_node_info command error occurred.',
    'e1004' => 'pcp_proc_count command error occurred.',
    'e1005' => 'pcp_proc_info command error occurred.',
    'e1006' => 'pcp_stop_pgpool command error occurred.',
    'e1007' => 'pcp_detach_node command error occurred.',
    'e1008' => 'pgpool.conf not found.',
    'e1009' => 'pcp.conf not found.',
    'e1010' => 'pcp_attach_node command error occurred.',
    'e1011' => 'Log file not found.',
    'e1012' => 'pcp_recovery_node command error occurred.',
    'e2001' => 'Database connection error occurred.',
    'e2002' => 'The error occurred when SELECT was executed',
    'e2003' => 'pgpool.conf not found.',
    'e3001' => 'Database connection error occurred.',
    'e3002' => 'The SQL error occurred when SELECT was executed',
    'e3003' => 'The SQL error occurred when INSERT was executed',
    'e3004' => 'The SQL error occurred when UPDATE was executed',
    'e3005' => 'The SQL error occurred when DELETE was executed',
    'e3006' => 'pgpool.conf not found.',
    'e4001' => 'pgpool.conf not found.',
    'e4002' => 'Could not read from pgpool.conf. ',
    'e4003' => 'Could not write to pgpool.conf. ',
    'e5001' => 'pgmgt.conf.php not found.',
    'e5002' => 'Could not read from pgmgt.conf.php.',
    'e5003' => 'Coult not write to pgmgt.conf.php.',
    'e6001' => 'pcp.conf not found.',
    'e6002' => 'Could not read from pcp.conf. ',
    'e6003' => 'Could not write to pcp.conf. ',
    'e7001' => 'pcp.conf not found.',
    'e8001' => 'Detailed information cannot be acquired.',
    
);

?>
