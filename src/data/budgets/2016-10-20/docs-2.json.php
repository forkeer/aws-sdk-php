<?php
// This file was auto-generated from sdk-root/src/data/budgets/2016-10-20/docs-2.json
return [ 'version' => '2.0', 'service' => 'All public APIs for AWS Budgets', 'operations' => [ 'CreateBudget' => 'Create a new budget', 'CreateNotification' => 'Create a new Notification with subscribers for a budget', 'CreateSubscriber' => 'Create a new Subscriber for a notification', 'DeleteBudget' => 'Delete a budget and related notifications', 'DeleteNotification' => 'Delete a notification and related subscribers', 'DeleteSubscriber' => 'Delete a Subscriber for a notification', 'DescribeBudget' => 'Get a single budget', 'DescribeBudgets' => 'Get all budgets for an account', 'DescribeNotificationsForBudget' => 'Get notifications of a budget', 'DescribeSubscribersForNotification' => 'Get subscribers of a notification', 'UpdateBudget' => 'Update the information of a budget already created', 'UpdateNotification' => 'Update the information about a notification already created', 'UpdateSubscriber' => 'Update a subscriber', ], 'shapes' => [ 'AccountId' => [ 'base' => 'Account Id of the customer. It should be a 12 digit number.', 'refs' => [ 'CreateBudgetRequest$AccountId' => NULL, 'CreateNotificationRequest$AccountId' => NULL, 'CreateSubscriberRequest$AccountId' => NULL, 'DeleteBudgetRequest$AccountId' => NULL, 'DeleteNotificationRequest$AccountId' => NULL, 'DeleteSubscriberRequest$AccountId' => NULL, 'DescribeBudgetRequest$AccountId' => NULL, 'DescribeBudgetsRequest$AccountId' => NULL, 'DescribeNotificationsForBudgetRequest$AccountId' => NULL, 'DescribeSubscribersForNotificationRequest$AccountId' => NULL, 'UpdateBudgetRequest$AccountId' => NULL, 'UpdateNotificationRequest$AccountId' => NULL, 'UpdateSubscriberRequest$AccountId' => NULL, ], ], 'Budget' => [ 'base' => 'AWS Budget model', 'refs' => [ 'Budgets$member' => NULL, 'CreateBudgetRequest$Budget' => NULL, 'DescribeBudgetResponse$Budget' => NULL, 'UpdateBudgetRequest$NewBudget' => NULL, ], ], 'BudgetName' => [ 'base' => 'A string represents the budget name. No ":" and "\\" character is allowed.', 'refs' => [ 'Budget$BudgetName' => NULL, 'CreateNotificationRequest$BudgetName' => NULL, 'CreateSubscriberRequest$BudgetName' => NULL, 'DeleteBudgetRequest$BudgetName' => NULL, 'DeleteNotificationRequest$BudgetName' => NULL, 'DeleteSubscriberRequest$BudgetName' => NULL, 'DescribeBudgetRequest$BudgetName' => NULL, 'DescribeNotificationsForBudgetRequest$BudgetName' => NULL, 'DescribeSubscribersForNotificationRequest$BudgetName' => NULL, 'UpdateNotificationRequest$BudgetName' => NULL, 'UpdateSubscriberRequest$BudgetName' => NULL, ], ], 'BudgetType' => [ 'base' => 'The type of a budget. It should be COST, USAGE, or RI_UTILIZATION.', 'refs' => [ 'Budget$BudgetType' => NULL, ], ], 'Budgets' => [ 'base' => 'A list of budgets', 'refs' => [ 'DescribeBudgetsResponse$Budgets' => NULL, ], ], 'CalculatedSpend' => [ 'base' => 'A structure holds the actual and forecasted spend for a budget.', 'refs' => [ 'Budget$CalculatedSpend' => NULL, ], ], 'ComparisonOperator' => [ 'base' => 'The comparison operator of a notification. Currently we support less than, equal to and greater than.', 'refs' => [ 'Notification$ComparisonOperator' => NULL, ], ], 'CostFilters' => [ 'base' => 'A map represents the cost filters applied to the budget.', 'refs' => [ 'Budget$CostFilters' => NULL, ], ], 'CostTypes' => [ 'base' => 'This includes the options for getting the cost of a budget.', 'refs' => [ 'Budget$CostTypes' => NULL, ], ], 'CreateBudgetRequest' => [ 'base' => 'Request of CreateBudget', 'refs' => [], ], 'CreateBudgetResponse' => [ 'base' => 'Response of CreateBudget', 'refs' => [], ], 'CreateNotificationRequest' => [ 'base' => 'Request of CreateNotification', 'refs' => [], ], 'CreateNotificationResponse' => [ 'base' => 'Response of CreateNotification', 'refs' => [], ], 'CreateSubscriberRequest' => [ 'base' => 'Request of CreateSubscriber', 'refs' => [], ], 'CreateSubscriberResponse' => [ 'base' => 'Response of CreateSubscriber', 'refs' => [], ], 'CreationLimitExceededException' => [ 'base' => 'The exception is thrown when customer tries to create a record (e.g. budget), but the number this record already exceeds the limitation.', 'refs' => [], ], 'DeleteBudgetRequest' => [ 'base' => 'Request of DeleteBudget', 'refs' => [], ], 'DeleteBudgetResponse' => [ 'base' => 'Response of DeleteBudget', 'refs' => [], ], 'DeleteNotificationRequest' => [ 'base' => 'Request of DeleteNotification', 'refs' => [], ], 'DeleteNotificationResponse' => [ 'base' => 'Response of DeleteNotification', 'refs' => [], ], 'DeleteSubscriberRequest' => [ 'base' => 'Request of DeleteSubscriber', 'refs' => [], ], 'DeleteSubscriberResponse' => [ 'base' => 'Response of DeleteSubscriber', 'refs' => [], ], 'DescribeBudgetRequest' => [ 'base' => 'Request of DescribeBudget', 'refs' => [], ], 'DescribeBudgetResponse' => [ 'base' => 'Response of DescribeBudget', 'refs' => [], ], 'DescribeBudgetsRequest' => [ 'base' => 'Request of DescribeBudgets', 'refs' => [], ], 'DescribeBudgetsResponse' => [ 'base' => 'Response of DescribeBudgets', 'refs' => [], ], 'DescribeNotificationsForBudgetRequest' => [ 'base' => 'Request of DescribeNotificationsForBudget', 'refs' => [], ], 'DescribeNotificationsForBudgetResponse' => [ 'base' => 'Response of GetNotificationsForBudget', 'refs' => [], ], 'DescribeSubscribersForNotificationRequest' => [ 'base' => 'Request of DescribeSubscribersForNotification', 'refs' => [], ], 'DescribeSubscribersForNotificationResponse' => [ 'base' => 'Response of DescribeSubscribersForNotification', 'refs' => [], ], 'DimensionValues' => [ 'base' => NULL, 'refs' => [ 'CostFilters$value' => NULL, ], ], 'DuplicateRecordException' => [ 'base' => 'The exception is thrown when customer tries to create a record (e.g. budget) that already exists.', 'refs' => [], ], 'ExpiredNextTokenException' => [ 'base' => 'This exception is thrown if the paging token is expired - past its TTL', 'refs' => [], ], 'GenericBoolean' => [ 'base' => 'A generic boolean value.', 'refs' => [ 'CostTypes$IncludeTax' => NULL, 'CostTypes$IncludeSubscription' => NULL, 'CostTypes$UseBlended' => NULL, ], ], 'GenericString' => [ 'base' => 'A generic String.', 'refs' => [ 'CostFilters$key' => NULL, 'DescribeBudgetsRequest$NextToken' => NULL, 'DescribeBudgetsResponse$NextToken' => NULL, 'DescribeNotificationsForBudgetRequest$NextToken' => NULL, 'DescribeNotificationsForBudgetResponse$NextToken' => NULL, 'DescribeSubscribersForNotificationRequest$NextToken' => NULL, 'DescribeSubscribersForNotificationResponse$NextToken' => NULL, 'DimensionValues$member' => NULL, 'Subscriber$Address' => NULL, ], ], 'GenericTimestamp' => [ 'base' => 'A generic timestamp. In Java it is transformed to a Date object.', 'refs' => [ 'TimePeriod$Start' => NULL, 'TimePeriod$End' => NULL, ], ], 'InternalErrorException' => [ 'base' => 'This exception is thrown on an unknown internal failure.', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => 'This exception is thrown if paging token signature didn\'t match the token, or the paging token isn\'t for this request', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => 'This exception is thrown if any request is given an invalid parameter. E.g., if a required Date field is null.', 'refs' => [], ], 'MaxResults' => [ 'base' => 'An integer to represent how many entries should a pagianted response contains. Maxium is set to 100.', 'refs' => [ 'DescribeBudgetsRequest$MaxResults' => NULL, 'DescribeNotificationsForBudgetRequest$MaxResults' => NULL, 'DescribeSubscribersForNotificationRequest$MaxResults' => NULL, ], ], 'NotFoundException' => [ 'base' => 'This exception is thrown if a requested entity is not found. E.g., if a budget id doesn\'t exist for an account ID.', 'refs' => [], ], 'Notification' => [ 'base' => 'Notification model. Each budget may contain multiple notifications with different settings.', 'refs' => [ 'CreateNotificationRequest$Notification' => NULL, 'CreateSubscriberRequest$Notification' => NULL, 'DeleteNotificationRequest$Notification' => NULL, 'DeleteSubscriberRequest$Notification' => NULL, 'DescribeSubscribersForNotificationRequest$Notification' => NULL, 'NotificationWithSubscribers$Notification' => NULL, 'Notifications$member' => NULL, 'UpdateNotificationRequest$OldNotification' => NULL, 'UpdateNotificationRequest$NewNotification' => NULL, 'UpdateSubscriberRequest$Notification' => NULL, ], ], 'NotificationThreshold' => [ 'base' => 'The threshold of the a notification. It should be a number between 0 and 100.', 'refs' => [ 'Notification$Threshold' => NULL, ], ], 'NotificationType' => [ 'base' => 'The type of a notification. It should be ACTUAL or FORECASTED.', 'refs' => [ 'Notification$NotificationType' => NULL, ], ], 'NotificationWithSubscribers' => [ 'base' => 'A structure to relate notification and a list of subscribers who belong to the notification.', 'refs' => [ 'NotificationWithSubscribersList$member' => NULL, ], ], 'NotificationWithSubscribersList' => [ 'base' => 'A list of Notifications, each with a list of subscribers.', 'refs' => [ 'CreateBudgetRequest$NotificationsWithSubscribers' => NULL, ], ], 'Notifications' => [ 'base' => 'A list of notifications.', 'refs' => [ 'DescribeNotificationsForBudgetResponse$Notifications' => NULL, ], ], 'NumericValue' => [ 'base' => 'A string to represent NumericValue.', 'refs' => [ 'Spend$Amount' => NULL, ], ], 'Spend' => [ 'base' => 'A structure represent either a cost spend or usage spend. Contains an amount and a unit.', 'refs' => [ 'Budget$BudgetLimit' => NULL, 'CalculatedSpend$ActualSpend' => NULL, 'CalculatedSpend$ForecastedSpend' => NULL, ], ], 'Subscriber' => [ 'base' => 'Subscriber model. Each notification may contain multiple subscribers with different addresses.', 'refs' => [ 'CreateSubscriberRequest$Subscriber' => NULL, 'DeleteSubscriberRequest$Subscriber' => NULL, 'Subscribers$member' => NULL, 'UpdateSubscriberRequest$OldSubscriber' => NULL, 'UpdateSubscriberRequest$NewSubscriber' => NULL, ], ], 'Subscribers' => [ 'base' => 'A list of subscribers.', 'refs' => [ 'CreateNotificationRequest$Subscribers' => NULL, 'DescribeSubscribersForNotificationResponse$Subscribers' => NULL, 'NotificationWithSubscribers$Subscribers' => NULL, ], ], 'SubscriptionType' => [ 'base' => 'The subscription type of the subscriber. It can be SMS or EMAIL.', 'refs' => [ 'Subscriber$SubscriptionType' => NULL, ], ], 'TimePeriod' => [ 'base' => 'A time period indicated the start date and end date of a budget.', 'refs' => [ 'Budget$TimePeriod' => NULL, ], ], 'TimeUnit' => [ 'base' => 'The time unit of the budget. e.g. MONTHLY, QUARTERLY, etc.', 'refs' => [ 'Budget$TimeUnit' => NULL, ], ], 'UnitValue' => [ 'base' => 'A string to represent budget spend unit. It should be not null and not empty.', 'refs' => [ 'Spend$Unit' => NULL, ], ], 'UpdateBudgetRequest' => [ 'base' => 'Request of UpdateBudget', 'refs' => [], ], 'UpdateBudgetResponse' => [ 'base' => 'Response of UpdateBudget', 'refs' => [], ], 'UpdateNotificationRequest' => [ 'base' => 'Request of UpdateNotification', 'refs' => [], ], 'UpdateNotificationResponse' => [ 'base' => 'Response of UpdateNotification', 'refs' => [], ], 'UpdateSubscriberRequest' => [ 'base' => 'Request of UpdateSubscriber', 'refs' => [], ], 'UpdateSubscriberResponse' => [ 'base' => 'Response of UpdateSubscriber', 'refs' => [], ], 'errorMessage' => [ 'base' => 'The error message the exception carries.', 'refs' => [ 'CreationLimitExceededException$Message' => NULL, 'DuplicateRecordException$Message' => NULL, 'ExpiredNextTokenException$Message' => NULL, 'InternalErrorException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'InvalidParameterException$Message' => NULL, 'NotFoundException$Message' => NULL, ], ], ],];
