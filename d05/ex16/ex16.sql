SELECT COUNT(member_history.date) AS 'movies'
FROM member_history
WHERE DATE(member_history.date) >= DATE(2006-10-30) AND DATE(member_history.date) <= DATE(2007-07-27) OR  DAY(member_history.date) = 24 AND MONTH(member_history.date) = 12;